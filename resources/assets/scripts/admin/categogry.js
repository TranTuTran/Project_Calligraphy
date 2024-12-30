function previewImage(event, previewId) {
  const input = event.target;
  const preview = document.getElementById(previewId);
  if (input.files && input.files[0]) {
      const reader = new FileReader();
      reader.onload = function(e) {
          preview.src = e.target.result;
          preview.style.display = 'block';
      };
      reader.readAsDataURL(input.files[0]);
  }
}

$('#createCategoryForm').on('submit', function(e) {
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

          clearValidationErrors('createCategoryForm');

          $('#createCategoryModal').modal('hide');
          alert('Category created successfully!');
          location.reload();
      },
      error: function(xhr) {

          displayValidationErrors(xhr, 'createCategoryForm');
      }
  });
})

$('form[id^="editCategoryForm-"]').on('submit', function(e) {
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


          $(`#editCategoryModal-${response.id}`).modal('hide');
          alert('Category updated successfully!');
          location.reload();
      },
      error: function(xhr) {

          displayValidationErrors(xhr, formId);
      }
  });
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
