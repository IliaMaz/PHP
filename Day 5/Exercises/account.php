    <form action="" method="post">
        <select name="pref" id="">
            <option value="" name="hat">Hat</option>
            <option value="" name="shirt">Shirt</option>
            <option value="" name="jacket">Jacket</option>
            <option value="" name="pants">Pants</option>
            <option value="" name="boots">Boots</option>
        </select>
        <input type="submit" value="Send" name="prefSubmit">
    </form>
    <?php
    if (isset($_POST['prefSubmit'])) {
        $pref = $_POST['pref'];
        if (isset($_POST['hat']))
            $_COOKIE['pref'] = 'hat';
        elseif (isset($_POST['shirt']))
            $_COOKIE['pref'] = 'shirt';
        elseif (isset($_POST['jacket']))
            $_COOKIE['pref'] = 'jacket';
        elseif (isset($_POST['pants']))
            $_COOKIE['pref'] = 'pants';
        elseif (isset($_POST['boots']))
            $_COOKIE['pref'] = 'boots';
        var_dump($_COOKIE);
    }


    ?>