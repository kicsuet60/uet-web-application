<!-- 5!=5*4*3**21=120 -->

<?Php
// $no = 5;
// $fact = 1;
// $a = $no;
// for ($a = $no; $a >= 1; $a--) {
//     $fact = $fact * $a;
// }
// $msg = "Factorial of $no is $fact";
// echo $msg;
?>
<form action="" method="post">
    Enter No. :<input type="text" name="no">
    <br>
    <input type="submit" name="submit">

    <?Php
    if (isset($_POST['submit'])) {
        $no = $_POST['no'];
        function factorial($fact)
        {
            if ($fact == 0) {
                return 1;
            }
            return $fact * factorial($fact - 1);
        }
        $msg = factorial($no);
    }
    ?>
    <p style="color:blue;font-size:50px;">
        <?php if (isset($msg)) {
            echo $msg;
        } ?>
    </p>