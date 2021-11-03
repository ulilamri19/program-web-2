<!DOCTYPE html>
<html>
    <body>
        <?php
            $programmer_php = array('Andi', 'Budi', 'Wati', 'Gunawan', 'Baco', 'Becce', 'Fatma');
            $programmer_python = array('Andi', 'Fatma', 'Fadli', 'Haris', 'Baco');
        ?>
            <ul>
                <?php
                    sort($programmer_php);
                    foreach($programmer_php as $key => $val)
                        {
                            echo "$val\n<br>";
                        }
                ?>
            <br>
            <br>
                <?php
                    rsort($programmer_python);
                    foreach($programmer_python as $key => $val)
                        {
                            echo "$val\n<br>";
                        }
                ?>
            <br>
            <br>
                <?php
                    $result=array_diff($programmer_php, $programmer_python);
                    print_r($result);
                ?>
            <br>
            <br>
                <?php
                    $result=array_diff($programmer_python, $programmer_php);
                    print_r($result);
                ?>
            <br>
            <br>
                <?php
                    $result=array_intersect($programmer_php, $programmer_python);
                    print_r($result);
                ?>
            <br>
            <br>
                <?php
                    $result = array_merge($programmer_php, $programmer_python);
                    print_r($result);
                ?>
            <br>
            <br>
                <?php
                    array_push($programmer_php, "Muhammad Fadhil Mahdy");
                    print_r($programmer_php);
                ?>
        </ul>
    </body>
</html>