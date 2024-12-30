// Đợi DOM tải xong
document.addEventListener('DOMContentLoaded', function () {
  // Lấy tất cả các công tắc trạng thái
  const toggles = document.querySelectorAll('.status-toggle');

  toggles.forEach(toggle => {
      // Lắng nghe sự kiện thay đổi trạng thái công tắc
      toggle.addEventListener('change', function () {
          // Lấy ID của bài đăng
          const postId = this.getAttribute('data-id');
          // Xác định status (1: bật, 2: tắt)
          const status = this.checked ? 1 : 2;

          // Gửi yêu cầu AJAX tới server
          fetch('/admin/social_post/update-status', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
              },
              body: JSON.stringify({
                  id: postId,
                  status: status
              })
          })
          .then(response => response.json())
          .then(data => {
              if (data.success) {
                  console.log('Status updated successfully!');
              } else {
                  console.error('Failed to update status.');
              }
          })
          .catch(error => console.error('Error:', error));
      });
  });
});