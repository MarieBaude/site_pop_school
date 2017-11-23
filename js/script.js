$(document).ready(function() {
  //Menu accordion com subcategorias
  $("#menu-home li.categoria > a").click(function(e) {
    //Cancela a ação do click
    e.preventDefault();
    // Controle class da Categoria ativada, mostar o sub-menu e marca a opção aberta
    $(this).toggleClass("active").parent().toggleClass("active");
    // Verifica se tem segundo nivel
    $(this).parent().children(".subcategorias-content").slideToggle();
  });

  //Click que altera as setas de direita e para baixo do accordeon ao clicar
  $("ul.categorias-content > li.categoria").click(function(event) {

    var varActive = $(this).children("a.active").hasClass("seta-direita");
    if (varActive == true) {
      $(this).children("a.seta-direita.active").removeClass("seta-direita").addClass("seta-baixo");
    } else {
      $(this).children("a.seta-baixo").removeClass("seta-baixo").addClass("seta-direita");
    };
  }); //ul.categorias-content
});

// ===== Scroll to Top ====
$(window).scroll(function() {
  if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
    $('#return-to-top').fadeIn(200); // Fade in the arrow
  } else {
    $('#return-to-top').fadeOut(200); // Else fade out the arrow
  }
});
$('#return-to-top').click(function() { // When arrow is clicked
  $('body,html').animate({
    scrollTop: 0 // Scroll to top of body
  }, 500);
});

/*----------------NEWLETTER----------------*/
$(document).ready(function() {
  $("#formulaire").submit(function() {
    $.ajax({
      type: "POST",
      data: $(this).serialize(),
      url: "post.php",
      success: function(data) {
        $("#post").html(data);
      },
      error: function() {
        $("#post").html('Une erreur est survenue.');
      }
    });
    return false;
  });
});

/*----NEWLETTER_CONFIRME----*/

function createAlert(title, summary, details, severity, dismissible, autoDismiss, appendToId) {
  var iconMap = {
    info: "fa fa-info-circle",
    success: "fa fa-thumbs-up",
    warning: "fa fa-exclamation-triangle",
    danger: "fa ffa fa-exclamation-circle"
  };

  var iconAdded = false;

  var alertClasses = ["alert", "animated", "flipInX"];
  alertClasses.push("alert-" + severity.toLowerCase());

  var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

  if (dismissible) {
    alertClasses.push("alert-dismissible");
  }

  var msgIcon = $("<i />", {
    "class": iconMap[severity] // you need to quote "class" since it's a reserved keyword
  });

  var msg = $("<div />", {
    "class": alertClasses.join(" ") // you need to quote "class" since it's a reserved keyword
  });

  if (title) {
    var msgTitle = $("<h4 />", {
      html: title
    }).appendTo(msg);

    if (!iconAdded) {
      msgTitle.prepend(msgIcon);
      iconAdded = true;
    }
  }

  if (summary) {
    var msgSummary = $("<strong />", {
      html: summary
    }).appendTo(msg);

    if (!iconAdded) {
      msgSummary.prepend(msgIcon);
      iconAdded = true;
    }
  }

  if (details) {
    var msgDetails = $("<p />", {
      html: details
    }).appendTo(msg);

    if (!iconAdded) {
      msgDetails.prepend(msgIcon);
      iconAdded = true;
    }
  }

  if (dismissible) {
    var msgClose = $("<span />", {
      "class": "close", // you need to quote "class" since it's a reserved keyword
      "data-dismiss": "alert",
      html: "<i class='fa fa-times-circle'></i>"
    }).appendTo(msg);
  }

  $('#' + appendToId).prepend(msg);

  if(!regex.test(champ.value)) {
      surligne(champ, true);
      document.getElementById('#pageMessages').innerHTML =('','Merci!','Vous êtes maintenant inscrit à la newsletter','success',true,true,'pageMessages');
      return false;
   }

   else {
      surligne(champ, false);
      document.getElementById('#pageMessages').innerHTML =('Opps!','Il y a eu une erreur','Merci entrez un email valide','danger',true,false,'pageMessages');
      return true;
   }

  if (autoDismiss) {
    setTimeout(function() {
      msg.addClass("flipOutX");
      setTimeout(function() {
        msg.remove();
      }, 1000);
    }, 2000);
  }
}
