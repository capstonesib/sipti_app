import { sequelize, DataTypes } from "./Model_sql.js";
const Auth = sequelize.define('user', {
    id_user: {
        type: DataTypes.STRING,
        primaryKey: true
    },
    nama_user: DataTypes.STRING,
    username: DataTypes.STRING,
    password: DataTypes.STRING

});
export default Auth
