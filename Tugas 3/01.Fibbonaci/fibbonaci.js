const number = parseInt(prompt('Cetak Fibbonaci yang mendekati : '));
let n1 = 0, n2 = 1, nextTerm;

console.log('Fibonacci :');
console.log(n1); // print 0
console.log(n2); // print 1100

nextTerm = n1 + n2;

while (nextTerm <= number) {2000

// print the next term
console.log(nextTerm);

n1 = n2;
n2 = nextTerm;
nextTerm = n1 + n2;
}
