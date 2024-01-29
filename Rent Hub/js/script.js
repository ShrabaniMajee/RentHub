$(function () {
  $(".form_valid").validate({
    rules: {
      name: {
        required: true,
      },

      email: {
        required: true,
        email: true,
      },

      phone: {
        required: true,
        digits: true,
        minlength: 10,
        maxlength: 10,
      },

      password: {
        required: true,
        minlength: 8,
      },

      confirm_password: {
        required: true,
        equalTo: "#password",
      },

      // post page validations
      carpet_area: {
        required: true,
        digits: true,
      },

      title: {
        required: true,
      },

      description: {
        required: true,
      },

      address: {
        required: true,
      },

      price: {
        required: true,
        digits: true,
      },

      cover_picture: {
        required: true,
        extension: "xls|csv",
      },
    },

    messages: {
      name: "*Required",
      email: {
        required: "*Required",
        email: "*Invalid email address",
      },

      phone: {
        required: "*Required",
        digits: "*Enter Valid Phone no.",
        minlength: "*Enter Valid Phone no.",
        maxlength: "*Enter Valid Phone no.",
      },

      password: {
        required: "*Required",
        minlength: "*Less than 8 chararcters",
      },

      confirm_password: {
        required: "*Required",
        equalTo: "*Password is not matching",
      },

      // post page validations
      carpet_area: {
        required: "*Required",
        digits: "*Enter a no.",
      },

      title: {
        required: "*Required",
      },

      description: {
        required: "*Required",
      },

      address: {
        required: "*Required",
      },

      price: {
        required: "*Required",
        digits: "*Enter price in number",
      },

      cover_picture: {
        required: "*Required",
        extension: "*Only png,jpeg,jpg files are allowed",
      },
    },
  });
});
