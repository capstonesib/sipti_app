import { Sequelize, DataTypes } from 'sequelize';
const sequelize = new Sequelize("sipti_app", "root", "", {
    host: 'localhost',
    dialect: 'mysql'
});
export { sequelize, DataTypes };