<div class="panel panel-sign">
    <div class="panel-title-sign mt-xl text-right">
        <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Récupérer mot de passe</h2>
    </div>
    <div class="panel-body">
        <div class="alert alert-info">
            <p class="m-none text-semibold h6">
                Entrez votre e-mail ci-dessous et nous vous enverrons des instructions de réinitialisation!</p>
        </div>

        <form action="/forget" method="POST">
            @method('POST')
            @csrf
            <div class="form-group mb-none">
                <div class="input-group">
                    <input name="email" type="email" placeholder="E-mail" class="form-control input-lg" />
                    <span class="input-group-btn">
										<button class="btn btn-primary btn-lg" type="submit">
réinitialiser!</button>
									</span>
                </div>
            </div>


        </form>
    </div>
</div>
