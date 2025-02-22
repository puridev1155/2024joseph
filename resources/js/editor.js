document.addEventListener('DOMContentLoaded', function () {
  const editorElement = document.querySelector('.editor-selector'); // Update with your editor's selector

  editorElement.addEventListener('trix-attachment-add', function (event) {
      const attachment = event.attachment;
      if (attachment.file) {
          uploadImage(attachment);
      }
  });

  function uploadImage(attachment) {
      const file = attachment.file;
      const formData = new FormData();
      formData.append('file', file);

      axios.post('/api/upload-image', formData, {
          headers: {
              'Content-Type': 'multipart/form-data',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
      }).then(function (response) {
          attachment.setAttributes({
              url: response.data.url,
              href: response.data.url
          });
          insertImage(attachment);
      }).catch(function (error) {
          console.error('Image upload failed:', error);
      });
  }

  function insertImage(attachment) {
      const imageUrl = attachment.getAttribute('url');
      const imgTag = `<img src="${imageUrl}" alt="Image">`;
      const editor = document.querySelector('.editor-selector'); // Update with your editor's selector
      editor.editor.insertHTML(imgTag);
  }
});