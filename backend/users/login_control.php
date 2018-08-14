<?php
    include __DIR__ . "/../dbconfig.php";
    if($_SESSION['admin_access'] == 1)
    {
        echo "<div>
                <button id='btn_edit'>Edit</button>
                <script>
                    document.getElementById('btn_edit').addEventListener('click', function(){
                        location.href = \"../backend/crud-operation/load_page.php\";
                    });
                </script>
            </div>";                
    }
?>