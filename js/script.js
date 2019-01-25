$(document).ready(function () {
    CarregarCategorias();
    CarregarLocalizacao();
    CarregarMunicipio();
});

/**** Categoria ****/
function CarregarCategorias() {
    $.ajax({
        url: "App/Action/CategoriaAction.php?req=1",
        data: {},
        dataType: "JSON",
        contentType: "application/json",
        type: "GET",
        success: function (retorno) {
            MontarSelectCategoria(retorno);
            MontarSelectCategoriaAnuncio(retorno);
        },
        error: function (erro) {
            console.log(erro);
        }
    });
}

function MontarSelectCategoria(data) {

    var categoria = [];

    for (var i = 0; i < data.length; i++) {
        categoria.push(data[i]);
    }

    var categories = document.getElementById("categories");

    var optionDefault = document.createElement("option");
    optionDefault.setAttribute("selected", "selected");
    optionDefault.innerText = "Selecione a categoria";

    categories.appendChild(optionDefault);

    for (var i = 0; i < categoria.length; i++) {
        var option = document.createElement("option");
        option.innerHTML = categoria[i].Nome;
        option.setAttribute("value", categoria[i].CategoriaId);
        //option.appendChild(option);

        categories.appendChild(option);
    }
}

/*
function MontarListaCategoria(data) {

    var categoria = [];

    for (var i = 0; i < data.length; i++) {
        categoria.push(data[i]);
    }

    var listaCategoria = document.getElementById("listaCategoria");

    var divDefault = document.createElement("div");

    categories.appendChild(optionDefault);

    for (var i = 0; i < categoria.length; i++) {
        divDefault.classList.add("col-lg-4 col-md-6 col-sm-6 col-12 item-mb");
        option.innerHTML = categoria[i].Nome;
        option.setAttribute("value", categoria[i].CategoriaId);
        //option.appendChild(option);

        listaCategoria.appendChild(option);
    }
}
*/

function MontarSelectCategoriaAnuncio(data) {

    var categoriaAnuncio = [];

    for (var i = 0; i < data.length; i++) {
        categoriaAnuncio.push(data[i]);
    }

    var categoryName = document.getElementById("category-name");

    var optionDefault = document.createElement("option");
    optionDefault.setAttribute("selected", "selected");
    optionDefault.innerText = "Selecione a categoria";

    categoryName.appendChild(optionDefault);

    for (var i = 0; i < categoriaAnuncio.length; i++) {
        var option = document.createElement("option");
        option.innerHTML = categoriaAnuncio[i].Nome;
        option.setAttribute("value", categoriaAnuncio[i].CategoriaId);
        //option.appendChild(option);

        categoryName.appendChild(option);

}

    /*
     <option value="" selected="selected">Selecione</option>
     <optgroup label="Frutas">
     <option value="6">Banana</option>
     <option value="1">Maça</option>
     <option value="4">Uva</option>
     </optgroup>
     */

}


/**** Estados ****/

function CarregarLocalizacao() {
    $.ajax({
        url: "App/Action/LocalizacaoAction.php?req=1",
        data: {},
        dataType: "JSON",
        contentType: "application/json",
        type: "GET",
        success: function (retorno) {
            MontarSelectLocalizacao(retorno);
            MontarSelectLocalizacaoInfoUsuario(retorno);
        },
        error: function (erro) {
            console.log(erro);
        }
    });
}

function MontarSelectLocalizacao(data) {

    var localizacao = [];

    for (var i = 0; i < data.length; i++) {
        localizacao.push(data[i]);
    }

    var location = document.getElementById("location");

    var optionDefault = document.createElement("option");
    optionDefault.setAttribute("selected", "selected");
    optionDefault.innerText = "Selecione o estado";

    location.appendChild(optionDefault);

    for (var i = 0; i < localizacao.length; i++) {
        var option = document.createElement("option");
        option.innerHTML = localizacao[i].Nome;
        option.setAttribute("value", localizacao[i].EstadoId);
        //option.appendChild(option);

        location.appendChild(option);
    }

}

function MontarSelectLocalizacaoInfoUsuario(data) {

    var localizacaoUsuario = [];

    for (var i = 0; i < data.length; i++) {
        localizacaoUsuario.push(data[i]);
    }

    var locationUsuer = document.getElementById("localizacao-user");

    var optionDefault = document.createElement("option");
    optionDefault.setAttribute("selected", "selected");
    optionDefault.innerText = "Selecione o estado";

    locationUsuer.appendChild(optionDefault);

    for (var i = 0; i < localizacaoUsuario.length; i++) {
        var option = document.createElement("option");
        option.innerHTML = localizacaoUsuario[i].Nome;
        option.setAttribute("value", localizacaoUsuario[i].EstadoId);
        //option.appendChild(option);

        locationUsuer.appendChild(option);
    }

}

/**** Municipios ****/

function CarregarMunicipio() {
    $.ajax({
        url: "App/Action/LocalizacaoAction.php?req=2",
        data: {},
        dataType: "JSON",
        contentType: "application/json",
        type: "GET",
        success: function (retorno) {
            MontarSelectMunicipio(retorno);
        },
        error: function (erro) {
            console.log(erro);
        }
    });
}

function MontarSelectMunicipio(data) {

    var municipio = [];

    for (var i = 0; i < data.length; i++) {
        municipio.push(data[i]);
    }

    var locationMunicipio = document.getElementById("municipio");

    var optionDefault = document.createElement("option");
    optionDefault.setAttribute("selected", "selected");
    optionDefault.innerText = "Selecione o municipio";

    locationMunicipio.appendChild(optionDefault);

    for (var i = 0; i < municipio.length; i++) {
        var option = document.createElement("option");
        option.innerHTML = municipio[i].Nome;
        option.setAttribute("value", municipio[i].MunicipioId);
        //option.appendChild(option);

        locationMunicipio.appendChild(option);
    }

}