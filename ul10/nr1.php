<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Kodune ulesanne - 1. nadal</title>
</head>

<body>

<?php
$text_area = "Enter your text here";
$bg_color = "#ffffff";
$txt_color = "#ffffff";
$brd_width = 0;
$brd_style = "solid";
$brd_color = "#ffffff";
$brd_radius = 0;
if (isset($_POST['txtarea']) && $_POST['txtarea']!="Enter your text here" && $_POST['txtarea']!="") {
    $text_area=htmlspecialchars($_POST['txtarea']);
}
if (isset($_POST['bg_col']) && $_POST['bg_col']!="") {
    $bg_color=htmlspecialchars($_POST['bg_col']);
}
if (isset($_POST['txt_col']) && $_POST['txt_col']!="") {
    $txt_color=htmlspecialchars($_POST['txt_col']);
}
if (isset($_POST['width']) && $_POST['width']!="") {
    $brd_width=htmlspecialchars($_POST['width']);
}
if (isset($_POST['style']) && $_POST['style']!="") {
    $brd_style=htmlspecialchars($_POST['style']);
}
if (isset($_POST['bcolor']) && $_POST['bcolor']!="") {
    $brd_color=htmlspecialchars($_POST['bcolor']);
}
if (isset($_POST['radius']) && $_POST['radius']!="") {
    $brd_radius=htmlspecialchars($_POST['radius']);
}

?>
<style scoped>
    .result {
        width: 400px;
        height: 100px;
        background-color: <?php echo $bg_color; ?>;
        color: <?php echo $txt_color; ?>;
        border-style: <?php echo $brd_style; ?>;
        border-color: <?php echo $brd_color; ?>;
        border-width: <?php echo $brd_width; ?>px;
        border-radius: <?php echo $brd_radius; ?>px;
        text-align: center;
        font-size: 32px;
        font-family:  Helvetica, sans-serif;
        padding-left: 15px;
        padding-bottom: 15px;
        padding-right: 15px;
        padding-top: 15px;
        margin-left: 15px;
        margin-top: 15px;
    }
    form{
        max-width: 350px;
    }
    ul {
        list-style-type: none;
        padding: 0;
        border: 1px solid #ddd;
    }

    ul li {
        padding: 8px 16px;
        border-bottom: 1px solid #ddd;
    }

    ul li:last-child {
        border-bottom: none
    }

</style>

    <p class="result">
    <?php if (isset($_POST['txtarea'])&& $_POST['txtarea']!="Enter your text here")  echo $text_area; ?>
    </p>

    <form method="post" action="nr1.php">


        <ul>
            <li><label>
                    <textarea name="txtarea" cols="30" rows="3"><?php echo $text_area; ?></textarea>
                </label></li>

            <li><label>
                    <input type="color" name="bg_col" value="<?php echo $bg_color; ?>">
                </label> Background color</li>

            <li><label>
                    <input type="color" name="txt_col" value="<?php echo $txt_color; ?>">
                </label> Text color</li>




            <li><label>
                    <input type="number" name="width" value="<?php echo $brd_width; ?>" min="0" max="20" step="1">
                </label> Border width (0-20px)</li>

            <li><label>
                    <select name="style">
                        <option
                            value="<?php if (isset($_POST['width']) && isset($_POST['style'])){echo $brd_style;} else echo "
                            select
                        "; ?>"><?php if (isset($_POST['style'])){echo $brd_style;} else echo "select";
                ?></option>
                        <option value="solid">solid</option>
                        <option value="dotted">dotted</option>
                        <option value="dashed">dashed</option>
                        <option value="outset">outset</option>
                        <option value="double">double</option>
                        <option value="inset">inset</option>
                        <option value="groove">groove</option>
                        <option value="ridge">ridge</option>

                    </select>
                </label> Border style</li>

            <li><label>
                    <input type="color" name="bcolor" value="<?php echo $brd_color; ?>">
                </label> Border color</li>

            <li><label>
                    <input type="number" name="radius" value="<?php echo $brd_radius; ?>" min="0" max="100" step="1">
                </label> Border radius (0-100px)</li>
        </ul>

        <button type="submit">Show it</button>
    </form>

<p>Validators:<br>
    <a href="http://validator.w3.org/check?uri=referer">
        <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a>
</p>

</body>
</html>