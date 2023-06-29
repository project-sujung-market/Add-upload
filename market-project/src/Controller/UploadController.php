<?php

namespace Art\Controller;

use Art\Core\DB;
use Art\Core\Lib;
use Cassandra\Date;

class UploadController extends MainController
{
    public function uploadPage() {
        $this->view("/upload", []);
    }

    public function uploadProcess() {
        $title = trim($_POST['title']);
        $comment = trim($_POST['comment']);
        $address = trim($_POST['address']);
        $price = trim($_POST['price']);
        $date = date("Y-m-d H:i:s", strtotime("+7hours"));

        if($title == "" || $comment == "" || $address == "" || $price == "") {
            Lib::MsgAndBack("공백을 입력할 순 없습니다.");
            exit;
        }

        DB::execute(
            "INSERT INTO boards VALUES (?,?,?,?,?,?,?,?)",
            [NULL,$_SESSION['user']->id,$title,$comment,$address,$price,$date,""]
        );

        $file = $_FILES['chooseFile'];
        if($file['name'] != "") {
            if($file['size'] > 1500000) {
                Lib::MsgAndBack("파일 사이즈가 너무 큽니다.");
            }
            $type = explode("/", $file['type'])[1];
            if($type == "gif" || $type == "jpeg" || $type == "jpg" || $type == "png") {
                $realName = $file['name'];
                $location = "images/" . $_SESSION['user']->uid;
                $name = $file['tmp_name'];
                if (!file_exists($location)) {
                    mkdir($location, 0777, true);
                }
                move_uploaded_file($name, $location . "/" . $realName);
                DB::execute(
                    "UPDATE boards SET image = ? WHERE id = ?",
                        [$location . "/" . $realName, DB::lastId()]
                );
                Lib::MsgAndGo("업로드 완료", "/");
                exit;
            }
            else {;
                Lib::MsgAndBack("이미지는 jpeg, jpg, gif, png 파일만 가능합니다.");
                exit;
            }
        }
        else {
            Lib::MsgAndGo("업로드 완료", "/");
            exit;
        }
    }
}