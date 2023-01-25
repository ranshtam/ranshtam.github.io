'use strict'

// console.log(createBoard);



// function createBoard() {
//     var board = []

//     for (var i = 0; i < 8; i++) {
//         board.push([])
        
//         for (var j = 0; j < 8; j++) {
//             // board[i][j] 
//         }
//     }
//     return board;
// }

var board = document.getElementById("board");
var level = 9; // level of the game, you can change it

for (var i = 0; i < level; i++) {
    var row = board.insertRow();
    for (var j = 0; j < level; j++) {
        var cell = row.insertCell();
        cell.innerHTML = i + "," + j;
    }
}
console.log(createTable(9,9))
function createTable(rows, cols) {
    let table = "<table>";
    
    for (let i = 0; i < rows; i++) {
      table += "<tr>";
      for (let j = 0; j < cols; j++) {
        table += "<td>\n</td>";
      }
      table += "</tr>";
    }
    
    table += "</table>";
    return table;
  }
  

    