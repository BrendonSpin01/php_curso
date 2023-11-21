<h2>contato</h2>

<form action="./pages/forms/contato.php" method="POST" role="form">

    <div class="form-group">
        <label for="">nome</label>
        <input type="text" class="form-control" name="name" placeholder="Difite seu nome">
    </div>
   
    <div class="form-group">
        <label for="">email</label>
        <input type="text" class="form-control" name="email" placeholder="Difite seu email">
    </div>
   

    <div class="form-group">
        <label for="">assunto</label>
        <input type="text" class="form-control" name="subject" placeholder="Difite o assunto">
    </div>
 
    <div class="form-group">
        <label for="">mensagem</label>
     <textarea name="message"  cols="30" rows="10" class="form-control" placeholder="Difite sua mensagem"></textarea>
    </div>
    <button type="submit" class="btn btn-prumary">submit</button>

</form>