import { sequelize, DataTypes } from "./model_sql.js";
const sequelize = new Sequelize("nyawer_onlen", "root", "", {
    host: 'localhost',
    dialect: 'mysql'
});
export { sequelize, DataTypes };