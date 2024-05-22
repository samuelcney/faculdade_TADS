const {prisma} = require("./prisma")

const showContacts = async(usersId)=>{
    const contacts = await prisma.contacts.findMany({
        where:{
            usersId
        }
    })
    return contacts
}

const addContact = async(name, email, phone, userId)=>{
    const contact = await prisma.contacts.create({
        data:{
            name: name,
            email: email,
            phone: phone,
            user:{
                connect:{
                    id: userId
                }
            }
        }
    })
    return contact
}

const updateContact = async(id, data)=>{
    const contact = await prisma.contacts.update({
        data,
        where:{
            id
        }
    })
    return contact
}

const deleteContact = async(id)=>{
    const contact = await prisma.contacts.delete({
        where:{
            id
        }
    })
    return contact
}

module.exports = {showContacts, addContact, updateContact, deleteContact}