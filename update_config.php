<?php
require_once 'config/config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $key = $_POST['key'];
    $value = $_POST['value'];

    if (isset($config[$key])) {
        if ($value == 'true') $value = true;
        else if ($value == 'false') $value = false;
        $config[$key] = $value;
        file_put_contents('config/config.php', "<?php\n\$config = " . var_export($config, true) . ";\n?>");
        echo "配置更新成功！";
    } else {
        echo "无效的配置键！";
    }
}
?>