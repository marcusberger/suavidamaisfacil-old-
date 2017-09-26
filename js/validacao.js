$(document).ready(function() {
  //Validação dos campos no submit do form principal
  $("#form-side-bar").submit(function() {
    var temNome, temEmail, isValid = false;

    //Restabelece o estado inicial dos elementos da tela
    $("#nome").removeClass("borda-vermelha");
    $("#email").removeClass("borda-vermelha");
    $("#alert-obrigatorio").hide();
    $("#alert-email-invalido").hide();

    //Valida se os campos e-mail e senha estão em branco
    temNome = validarCampoVazio("#nome", "#alert-obrigatorio");
    temEmail = validarCampoVazio("#email", "#alert-obrigatorio");
    if (temEmail && temNome) {
      isValid = true;
      isValid = validaEmail("#email", "#alert-email-invalido");
      // if (isValid) {
      //   isValid = validaNome("#nome", "#alert-nome-completo");
      // }
    }
    return isValid
  })

  $("#form-footer").submit(function() {
    var temNome, temEmail, isValid = false;

    //Restabelece o estado inicial dos elementos da tela
    $("#nome-footer").removeClass("borda-vermelha");
    $("#email-footer").removeClass("borda-vermelha");
    $("#alert-obrigatorio-footer").hide();
    $("#alert-email-invalido-footer").hide();

    //Valida se os campos e-mail e senha estão em branco
    temNome = validarCampoVazio("#nome-footer", "#alert-obrigatorio-footer");
    temEmail = validarCampoVazio("#email-footer", "#alert-obrigatorio-footer");
    if (temEmail && temNome) {
      isValid = true;
      isValid = validaEmail("#email-footer", "#alert-email-invalido-footer");
      // if (isValid) {
      //   isValid = validaNome("#nome-footer", "#alert-nome-completo-footer");
      // }
    }
    return isValid
  })

  //Valida se o campo está vazio
  function validarCampoVazio(id, alert) {
    if ($(id).val().length <= 2) {
      $(id).addClass("borda-vermelha");
      $(alert).show();
      return false;
    } else {
      return true;
    }
  }

  //Valida se o e-mail é válido
  function validaEmail(id, alert) {
      var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
      var isValid = pattern.test($(id).val());
      if (!isValid) {
        $(id).addClass("borda-vermelha");
        $(alert).show();
      }
      return isValid;
  }

  //Valida se é um nome válido
  function validaNome(id, alert) {
      var pattern = /^([a-zA-Z]{2,}\s[a-zA-z]{1,}'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)$/u;
      var isValid = pattern.test($(id).val());
      if (!isValid) {
        $(id).addClass("borda-vermelha");
        $(alert).show();
      }
      return isValid;
  }

})
