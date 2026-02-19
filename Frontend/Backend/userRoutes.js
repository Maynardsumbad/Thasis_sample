const express = require("express");
const router = express.Router();
const db = require("../config/db");

const { verifyToken } = require("../middleware/authMiddleware");
const { authorizeRoles } = require("../middleware/roleMiddleware");

// 👤 Logged-in user profile
router.get("/profile", verifyToken, (req, res) => {
  res.json({
    message: "Profile accessed successfully",
    user: req.user,
  });
});

// 👑 Admin - View All Users
router.get(
  "/",
  verifyToken,
  authorizeRoles("admin"),
  (req, res) => {
    const sql =
      "SELECT id, username, email, role, created_at FROM users";

    db.query(sql, (err, results) => {
      if (err) return res.status(500).json(err);

      res.json(results);
    });
  }
);

// 👑 Admin - Delete User
router.delete(
  "/:id",
  verifyToken,
  authorizeRoles("admin"),
  (req, res) => {
    const userId = req.params.id;

    if (req.user.id == userId) {
      return res.status(400).json({
        message: "You cannot delete yourself",
      });
    }

    const sql = "DELETE FROM users WHERE id = ?";

    db.query(sql, [userId], (err) => {
      if (err) return res.status(500).json(err);

      res.json({
        message: "User deleted successfully",
      });
    });
  }
);

// 👑 Admin - Change Role
router.put(
  "/:id/role",
  verifyToken,
  authorizeRoles("admin"),
  (req, res) => {
    const userId = req.params.id;
    const { role } = req.body;

    if (!["admin", "user"].includes(role)) {
      return res.status(400).json({
        message: "Invalid role",
      });
    }

    const sql = "UPDATE users SET role = ? WHERE id = ?";

    db.query(sql, [role, userId], (err) => {
      if (err) return res.status(500).json(err);

      res.json({
        message: "User role updated successfully",
      });
    });
  }
);

module.exports = router;
