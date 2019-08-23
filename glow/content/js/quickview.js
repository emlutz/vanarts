const quickView = () => {
  const openView = (element) => {
    let gridProduct = element.attr('data-id');
    // console.log(gridProduct);
    let viewProduct = $('[data-id="'+gridProduct+'"]');
    // console.log(viewProduct);
    viewProduct.removeClass('hide');
    viewProduct.addClass('open');
  }
  $('.view').on('click', function() {
    openView($(this));
  });
  const closeView = () => {
    let closeView = $('.open');
    closeView.removeClass('open');
    closeView.addClass('hide');
  }
  $('.closeQuick').on('click', function() {
    closeView();
  });
}
quickView();