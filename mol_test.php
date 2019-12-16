<!DOCTYPE html>
<html>
<head>
    <meta charset=“utf-8”>
    <title>計算結果</title>
</head>
<body>
<?php
    echo “計算結果は“.$_POST[“mol/L”]*$_POST[“g/mol”]*$_POST[“L”].“gです“;
?>
</body>
<form>
    <input type=“button” onclick=“history.back()” value=“戻る“>
</form>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset=“utf-8”>
    <title>save the student</title>
</head>
<body>
    <a>試薬量を求める計算</a><br /><br />
    <form method=“POST” action=“mass_result.php”>
    <p>
        <input type=“text” name=“mol/L” />mol/L ×
        <input type=“text” name=“g/mol” />g/mol ×
        <input type=“text” name=“L” />L
    </p>
    <br />
    <input type=“submit” value=“計算” />
</form>
</body>
</html>
