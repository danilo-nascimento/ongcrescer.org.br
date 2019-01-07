// See http://brunch.io for documentation.
exports.paths = {
  public: "./",
  watched: ["scss", "js"]
}

exports.files = {
  javascripts: {
    joinTo: {
      "./app.js": /^js\/app/,
      "./vendor.js": /^js\/vendor/
    }
  },
  stylesheets: {
    joinTo: "./style.css"
  }
};

exports.plugins = {
  sass: {
    sourceMapEmbed: true
  }
}
