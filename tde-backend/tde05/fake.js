const { faker } = require('@faker-js/faker');

const fakeUser = () =>{
    return {
        nome: faker.person.fullName(),
        email: faker.internet.email(),
        dataNasc: faker.date.birthdate(),
    }
}

console.log(fakeUser())