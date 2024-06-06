import express from "express";
import bodyParser from "body-parser";

import session from "express-session";
import flash from "connect-flash";
const app = express();
const hostname = "127.0.0.1";
const port = 3030;
import Auth from "./controllers/auth.js";
app.use(bodyParser.json());
app.use(express.urlencoded({ extended: true }));

app.use(
  session({
    secret: 'ini adalah kode secret',
    resave: false,
    saveUninitialized: true,
    cookie: { maxAge: 60 * 60 * 1000 }, // 1 hour
  })
);
app.use(flash())


app.use((req, res, next) => {
  res.locals.message = req.flash();
  next();
});

app.set("view engine", "ejs");