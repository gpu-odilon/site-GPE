const contactForm = document.getElementById('contact-form');

function removeAllMessagesFromForm(form){
  form.querySelectorAll('[class*="msg"]').forEach(msg => {
    msg.remove();
  });
}

contactForm.onsubmit = e => {
  e.preventDefault();

  contactForm.querySelector('input[type="submit"]').disabled = true;
  document.getElementById("sendmailLoading").style.display = "block";

  let contactnicknameInput = contactForm.querySelector('input[name="cont-nickname"]');
  let contactnameInput = contactForm.querySelector('input[name="cont-nom"]');
  let contactemailInput = contactForm.querySelector('input[name="cont-email"]');
  let contacttelInput = contactForm.querySelector('input[name="cont-tel"]');
  let contactsubjectInput = contactForm.querySelector('input[name="cont-subject"]');
  let contactmessageInput = contactForm.querySelector('textarea[name="cont-message"]');

  fetch('contact-email-function.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    mode: 'same-origin',
    credentials: "same-origin",
    body: JSON.stringify({
      contactNickname: contactnicknameInput.value,
      contactName: contactnameInput.value,
      contactEmail: contactemailInput.value,
      contactTel: contacttelInput.value,
      contactSubject: contactsubjectInput.value,
      contactMessage: contactmessageInput.value
    })
  }).then(json=>json.json()).then(res => {
    removeAllMessagesFromForm(contactForm);
    console.log(res);
    if(res['contact_name_err']){
      contactnameInput.insertAdjacentHTML('beforebegin', `<p class="name-form__err-msg">${res['contact_name_err']}</p>`);
    }
    if(res['contact_email_err']){
      contactemailInput.insertAdjacentHTML('beforebegin', `<p class="name-form__err-msg">${res['contact_email_err']}</p>`);
    }
    if(res['contact_tel_err']){
      contacttelInput.insertAdjacentHTML('beforebegin', `<p class="name-form__err-msg">${res['contact_tel_err']}</p>`);
    }
    if(res['contact_subject_err']){
      contactsubjectInput.insertAdjacentHTML('beforebegin', `<p class="name-form__err-msg">${res['contact_subject_err']}</p>`);
    }
    if(res['contact_message_err']){
      contactmessageInput.insertAdjacentHTML('beforebegin', `<p class="name-form__err-msg">${res['contact_message_err']}</p>`);
    }
    if(res['contact_top_error']){
      contactForm.insertAdjacentHTML('afterbegin', `<p class="hire-form__-msg-error">${res['contact_top_error']}</p>`);
    }
    if(res['contact_top_err'] || res['contact_name_err'] || res['contact_email_err'] || res['contact_tel_err'] || res['contact_poste_err'] || res['contact_message_err']){
      contactForm.querySelector('input[type="submit"]').disabled = false;
      document.getElementById("sendmailLoading").style.display = "none";
      return;
    }
    if(res['contact_top_success']){
      contactForm.insertAdjacentHTML('afterbegin', `<p class="hire-form__-msg-succes">${res['contact_top_success']}</p>`);
      contactForm.reset();
      contactForm.querySelector('input[type="submit"]').disabled = false;
      document.getElementById("sendmailLoading").style.display = "none";
    }
  });
}