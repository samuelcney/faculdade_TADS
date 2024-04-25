const mapearArray = (arr, map)=>{

    const newArray = []
    for(let element of arr){
        const select = map(element)
        newArray.push(select)
    }
    
    return newArray
}

const array = [2, 5, 4, 7, 9]

const quadrado = (e) => e*e;
const moreOne = (e) => e+1;

console.log(array)
console.log(mapearArray(array, quadrado))