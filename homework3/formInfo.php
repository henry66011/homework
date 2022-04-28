<?php
    session_start(); //建立或開啟已存在的session
    $_SESSION["test"]="true"; //設定全域變數值
    $test="testString";
    setcookie("testName",$test,time()+60); //設定cookie
    // if(isset($_COOKIE["testName"])){doThings} //cookie用法範例
?>
<?php
$email = $_POST["email"];
echo "電子信箱：" . $email;
$mainFood = $_POST["mainFood"];
// $mainFood=implode(",",$mainFood);
$mainFoodCount = count($mainFood);
$name = $_POST["name"];
$name = nl2br($name); //可將\n自動轉br?
$name = strip_tags($name); //去除超連接
echo nl2br("\n" . $name);
for ($i = 0; $i < $mainFoodCount; $i++)
    echo "<br>飲食偏好：" . $mainFood[$i];
$fileName = $_FILES["file"];
if ($fileName) {
    $fileName = $_FILES["file"];
    echo $_FILES["file"]["name"] . "<br>"; //讀取檔案名稱
    echo $fileName["tmp_name"] . "<br>"; //讀取檔案的暫存資料夾
    echo $_FILES["file"]["size"] . "<br>";
    echo $fileName["type"] . "<br>"; //檔案型態
}
//把檔案儲存下來
if (copy($_FILES["file"]["tmp_name"], $fileName["name"])) {
    echo "scc";
} else {
    echo "err";
}
