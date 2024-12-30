function checkDelete(event, message) {

  if (!confirm(message)) {
      event.preventDefault();
  }
}

$(document).ready(function() {

  $('#addSampleImagesBox').on('click', function() {
      $('#sample_images').click();
  });


  $('#sample_images').on('change', function() {
      const files = this.files;
      for (let i = 0; i < files.length; i++) {
          if (files[i].type.startsWith('image/')) {
              const reader = new FileReader();
              reader.onload = function(e) {
                  const imgElement = `
                  <div class="image-container">
                      <img src="${e.target.result}" alt="Image" class="rounded">
                      <button class="delete-btn">&times;</button>
                  </div>
              `;
                  $('#sample_imagePreview').append(imgElement);
              };
              reader.readAsDataURL(files[i]);
          }
      }
  });


  $(document).on('click', '.delete-btn', function() {
      $(this).closest('.image-container').remove();
  });
});

$('.modal ').insertAfter($('body'));
$('.modal').on('show.bs.modal', function() {
  $(this).appendTo('body');
});

function displayValidationErrors(xhr, formId) {
  $(`#${formId} .is-invalid`).removeClass('is-invalid');
  $(`#${formId} .is-valid`).removeClass('is-valid');
  $(`#${formId} .invalid-feedback`).text('').hide();
  $(`#${formId} .valid-feedback`).text('').hide();

  if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
      const errors = xhr.responseJSON.errors;
      $(`#${formId} [name]`).each(function() {
          const field = $(this).attr('name');
          const input = $(this);
          if (errors[field]) {
              input.addClass('is-invalid');
              $(`#error-${field}`).text(errors[field][0]).show();
          } else {
              input.addClass('is-valid');
              $(`#valid-${field}`).text('Looks good!').show();
          }
      });
  } else {
      console.error('Validation error format is invalid', xhr.responseJSON);
  }
}

function clearValidationErrors(formId) {
  $(`#${formId} .is-invalid`).removeClass('is-invalid');
  $(`#${formId} .invalid-feedback`).text('').hide();
}
$('#createLessonForm').on('submit', function(e) {
  e.preventDefault();
  const form = $(this);
  const url = form.attr('action');
  $.ajax({
      url: url,
      type: 'POST',
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function(response) {
          clearValidationErrors('createLessonForm');
          $('#createLessonModal').modal('hide');
          alert('Lesson created successfully!');
          location.reload();
      },
      error: function(xhr) {
          displayValidationErrors(xhr, 'createLessonForm');
      }
  });
})
$('form[id^="editLessonForm-"]').on('submit', function(e) {
  e.preventDefault();
  const form = $(this);
  const url = form.attr('action');
  const formId = form.attr('id');
  $.ajax({
      url: url,
      type: 'POST',
      data: new FormData(this),
      contentType: false,
      processData: false,
      success: function(response) {
          clearValidationErrors(formId);
          $(`#editLessonModal-${response.id}`).modal('hide');
          alert('Lesson updated successfully!');
          location.reload();
      },
      error: function(xhr) {
          displayValidationErrors(xhr, formId);
      }
  });
});