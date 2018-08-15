<?php
    include "/../dbconfig.php";

    if(isset($_SESSION['admin_access']))
    {
        if ($_SESSION['admin_access'] == 1)
        {
            echo "<div>
                <button id='btn_edit'>Edit</button>
                <script>
                    document.getElementById('btn_edit').addEventListener('click', function(){
                        location.href = \"../crud-operation/load_page.php\";
                    });
                </script>
            </div>";  
        }
                      
    }
    else{
        
    }
?>