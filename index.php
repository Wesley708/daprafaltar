<?php

    include 'conexao.php';
    include 'header.php';

    $sql = "SELECT * FROM materias";
    $result = mysqli_query($link, $sql);
    $total = mysqli_num_rows($result);

    $row = mysqli_fetch_assoc($result);

    echo '<h2>Dias em que posso faltar</h2>';
    // echo'<a href="http://localhost/daprafaltar/form.php">
    //     <div class="mais-container"><img src="assets/img/mais.png" class="mais" alt=""></div>
    // </a>';
    if($total == 0){
        echo '<h2>Você ainda não tem matérias cadastradas</h2>';
    }else{

        do
        {
            ?>
            <div class="materias-container">
                <p class='nome'><?=$row['nome']?></p>
                <p class='horas'>Aulas <?=$row['aulas']?></p>
                <div class='buton'>
                    <p>Faltas</p>
                    <button>-</button>
                    <p> <?=$row['faltas']?> </p>
                    <button>+</button>
                </div>
                <div>
                    <a href="formUpdate.php?id=<?php echo $row['id'];?>&materia=<?= $row['nome'];?>&numeroAulas=<?php echo $row['aulas'];?>&maximoFaltas=<?php echo $row['faltas'];?>">
                        <img src="assets/img/editar.png" alt="">
                    </a>

                    <a href="actionDelete.php?id=<?php echo $row['id'];?>">
                        <img src="assets/img/lixo.png" alt="">
                    </a>
                </div>
            </div>

            <?php
        }while($row = mysqli_fetch_assoc($result));
    }

    echo '<div class="form ">
        
        <form class="materias-container" action="actionCreate.php" method="POST">
            <input name="materia" class="input-cadastrar" placeholder="Matéria" type="text" required>
            <input name="numeroAulas" class="input-cadastrar" type="number" placeholder="Total de aulas" required>
            <input name="maximoFaltas" class="input-cadastrar" type="number" placeholder="Máximo de faltas" required>
            <input type="submit" src="assets/img/mais.png" class="cadastrar-button" value="">        
        </form>
    </div>';
    
    
    include 'footer.php';

?>