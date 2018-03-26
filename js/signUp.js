

function showLogin() {
  var output = "<div class=\"popupBackground\" id=\"popup\"><div class=\"popupMessageFit\" id=\"popupContent\"><div class=\"closePopup\" onclick=\"removeID('popup')\">x</div><h2>Login</h2><input id=\"email\" placeholder=\"Email\"/><br><input type=\"password\" id=\"password\" placeholder=\"Password\"/><div class=\"actionButton\" onclick=\"\">→</div></div></div>";
  document.body.innerHTML += output;
}
