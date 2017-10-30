// See http://brunch.io for documentation.
exports.paths = {
  public: "./",
  watched: ["scss"]
}

exports.files = {
  stylesheets: {
    joinTo: "./style.css"
  }
};

exports.plugins = {
  sass: {
    sourceMapEmbed: true
  }
}
