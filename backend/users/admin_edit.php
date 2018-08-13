<?php
    // include "../dbconfig.php";
    if(session_status() == 2)
    {
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
    }
?>