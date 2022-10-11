const hireForm = document.getElementById('hire-form');

function removeAllMessagesFromForm(form){
  form.querySelectorAll('[class*="msg"]').forEach(msg => {
    msg.remove();
  });
}

hireForm.onsubmit = e => {
  e.preventDefault();

  hireForm.querySelector('input[type="submit"]').disabled = true;
  document.getElementById("sendmailLoading").style.display = "block";

  let nicknameInput = hireForm.querySelector('input[name="nickname"]');
  let nameInput = hireForm.querySelector('input[name="nom"]');
  let emailInput = hireForm.querySelector('input[name="email"]');
  let telInput = hireForm.querySelector('input[name="tel"]');
  let posteInput = hireForm.querySelector('input[name="poste"]');
  let messageInput = hireForm.querySelector('textarea[name="message"]');

  fetch('email-function.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    mode: 'same-origin',
    credentials: "same-origin",
    body: JSON.stringify({
      nickname: nicknameInput.value,
      name: nameInput.value,
      email: emailInput.value,
      tel: telInput.value,
      poste: posteInput.value,
      message: messageInput.value
    })
  }).then(json=>json.json()).then(res => {
    removeAllMessagesFromForm(hireForm);
    console.log(res);
    if(res['name_err']){
      nameInput.insertAdjacentHTML('beforebegin', `<p class="name-form__err-msg">${res['name_err']}</p>`);
    }
    if(res['email_err']){
      emailInput.insertAdjacentHTML('beforebegin', `<p class="name-form__err-msg">${res['email_err']}</p>`);
    }
    if(res['tel_err']){
      telInput.insertAdjacentHTML('beforebegin', `<p class="name-form__err-msg">${res['tel_err']}</p>`);
    }
    if(res['poste_err']){
      posteInput.insertAdjacentHTML('beforebegin', `<p class="name-form__err-msg">${res['poste_err']}</p>`);
    }
    if(res['message_err']){
      messageInput.insertAdjacentHTML('beforebegin', `<p class="name-form__err-msg">${res['message_err']}</p>`);
    }
    if(res['top_error']){
      hireForm.insertAdjacentHTML('afterbegin', `<p class="hire-form__-msg-error">${res['top_err']}</p>`);
    }
    if(res['top_err'] || res['name_err'] || res['email_err'] || res['tel_err'] || res['poste_err'] || res['message_err']) {
      hireForm.querySelector('input[type="submit"]').disabled = false;
      document.getElementById("sendmailLoading").style.display = "none";
      return;
    }
    if(res['top_success']){
      hireForm.insertAdjacentHTML('afterbegin', `<p class="hire-form__-msg-succes">${res['top_success']}</p>`);
      hireForm.reset();
      hireForm.querySelector('input[type="submit"]').disabled = false;
      document.getElementById("sendmailLoading").style.display = "none";
    }
  });
}