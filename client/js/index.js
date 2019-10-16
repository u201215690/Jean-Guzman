$(function(){
  var l = new Login();
})


class Login {
  constructor() {
    this.submitEvent()
  }

  submitEvent(){
    $('form').submit((event)=>{
      event.preventDefault()
      this.sendForm()
    })
  }

  sendForm(){
    let form_data = new FormData();
    form_data.append('username', $('#user').val());
    form_data.append('password', $('#password').val());
    $.ajax({
      url: '../server/check_login.php?check-login=1',
      dataType: "json",
      cache: false,
      processData: false,
      contentType: false,
      data: form_data,
      type: 'POST',
      success: function(data){
        if (data.msg == "OK") {
          window.location.href = 'main.php';
        }else {
          alert(data.msg);
        }
      },
      error: function(){
        alert("error en la comunicación con el servidor");
      }
    })
  }
}
