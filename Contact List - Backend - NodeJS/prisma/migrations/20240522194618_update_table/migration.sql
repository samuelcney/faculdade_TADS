-- RedefineTables
PRAGMA foreign_keys=OFF;
CREATE TABLE "new_Contacts" (
    "id" INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    "name" TEXT NOT NULL,
    "email" TEXT NOT NULL,
    "phone" TEXT NOT NULL,
    "usersId" INTEGER NOT NULL,
    CONSTRAINT "Contacts_usersId_fkey" FOREIGN KEY ("usersId") REFERENCES "Users" ("id") ON DELETE RESTRICT ON UPDATE CASCADE
);
INSERT INTO "new_Contacts" ("email", "id", "name", "phone", "usersId") SELECT "email", "id", "name", "phone", "usersId" FROM "Contacts";
DROP TABLE "Contacts";
ALTER TABLE "new_Contacts" RENAME TO "Contacts";
PRAGMA foreign_key_check("Contacts");
PRAGMA foreign_keys=ON;
