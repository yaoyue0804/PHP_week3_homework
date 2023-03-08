<?php
echo "請確認資料</br>";

if(isset($_POST["id"])){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $gender=$_POST["gender"];
    
    echo "學號: ".$id."</br>";
    echo "姓名: ".$name."</br>";
    echo "性別: ".$gender."</br>";

    $grade=$_POST["grade"];
    echo "年級: ";
    if($grade=="one"){
        echo "大一</br>";
    }
    if($grade=="two"){
        echo "大二</br>";
    }
    if($grade=="three"){
        echo "大三</br>";
    }
    if($grade=="four"){
        echo "大四</br>";
    }
    echo "葷素食: ";
    if(isset($_POST["meat"])){
        $meat=$_POST["meat"];
        echo "葷食</br>";
    }
    if(isset($_POST["vege"])){
        $vege=$_POST["vege"];
        echo "素食</br>";
    }

    $comment=$_POST["comment"];
    echo "您的評論:</br>";
    echo strip_tags(nl2br($comment));

}else{
    echo "data wrong";
}
?>