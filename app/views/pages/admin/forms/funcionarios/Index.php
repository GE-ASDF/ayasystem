<div class="container pt-5 mt-4">
    <div id="cadastro-mensagem-funcionario" class="mensagem">
            <?php echo getFlash("success"); ?>
            <?php echo getFlash("fail"); ?>
    </div>
    <h1 class="title fs-2"><?php echo $title ?></h1>
<div class="overflow-auto ">

    <div class="card">
        <div class="card-header d-flex align-items-center">
            <span class="text p-3 fw-bold fs-5">Pesquisar: </span>
            <input type="text" id="txtBusca" class="form-control w-50" name="txtBusca">
        </div>
    </div>
    <table class="table table-dark table-striped">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Nome do funcionario</th>
                <th>Telefone do funcionario</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php if($funcionarios): ?>
                <?php foreach($funcionarios as $funcionario): ?>
                    <tr class="text-center linha">
                        <td><?php echo $funcionario->CodigoFuncionario ?></td>
                        <td><?php echo $funcionario->NomeFuncionario ?></td>
                        <td><?php echo $funcionario->TelFuncionario ?></td>
                        <td class="d-flex">
                            <form class="p-1" action="<?php echo URL_BASE ?>admin/funcionarios/editar" method="POST">
                                <input type="hidden" name="Codigofuncionario" value="<?php echo $funcionario->CodigoFuncionario ?>">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </form>
                            <form class="p-1 form-delete" action="<?php echo URL_BASE ?>admin/funcionarios/delete" method="GET">
                                <input type="hidden" name="CodigoFuncionario" value="<?php echo $funcionario->CodigoFuncionario ?>">
                                <button type="submit" class="btn btn-danger">Apagar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    
</div>
</div>
<script>
    const formDelete = Array.from(document.querySelectorAll(".form-delete"))
    formDelete.forEach(form => {
        form.addEventListener("submit", (e)=>{
            let confirm = window.confirm("Deseja realmente apagar este registro?");
            if(!confirm){
                e.preventDefault();
            }
        })
    })
</script>