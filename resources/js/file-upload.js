document.addEventListener('livewire:load', () => {
  Livewire.on('fileUploadCancelled', () => {
      const fileInput = document.querySelector('input[type="file"]');
      if (fileInput) {
          fileInput.value = ''; // Clear the input field
      }
  });
});