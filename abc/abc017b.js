// inputに入力データ全体が入る
function Main(input) {

  var re = /^(ch|o|k|u)*$/;

  var text = input.trim();

  if(text.match(re)){
    console.log("YES");
  } else {
    console.log("NO");
  }
}

Main(require("fs").readFileSync("/dev/stdin", "utf8"));