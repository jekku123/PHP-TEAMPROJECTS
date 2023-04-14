$('#growingtextarea').on('input', function () {
  this.style.height = 'auto';
  console.log('hello');
  this.style.height = this.scrollHeight + 'px';
});
