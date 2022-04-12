<h2 class="mb-4"><?php $title ?></h2>
<div class="d-md-flex gap-3 w-75" id="search-field">
    <select id="programa" class="form-select text-center mb-3" aria-label="Select de destinos">
        <option selected>PROGRAMA</option>
        <option value="Estudo e trabalho">Estudo e trabalho</option>
        <option value="Idiomas">Idiomas</option> 
        <option value="Universidade no exterior">Universidade no exterior</option>
        <option value="Intercâmbio em família">Intercâmbio em família</option>
        <option value="Business English">Business English</option>
    </select>

    <select id="destino" class="form-select text-center mb-3" aria-label="Select de programas ">
        <option selected>DESTINO</option>
        <option value="Canadá">Canadá</option>
        <option value="Alemanha">Alemanha</option>
        <option value="Inglaterra">Inglaterra</option>
        <option value="Espanha">Espanha</option>
        <option value="Irlanda">Irlanda</option>
    </select>

    <div class="">
        <button id="btn-buscar" class="btn text-center text-white w-100 mb-3">
            BUSCAR
        </button>
    </div>
</div>

<script>
    $('#btn-buscar').click((e) => { 
        var getUrl = window.location;
        var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
        var queryPrograma = $("#programa option:selected").val();
        var queryDestino = $("#destino option:selected").val();
        var encodeParams = encodeURI(`${queryPrograma}][${queryDestino}`)
        window.location.href = `${baseUrl}/resultados-da-busca?results=${encodeParams}`
    });
</script>