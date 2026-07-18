# 🌐 OneSpot Centralized Education LMS & ERP

<!-- Dynamic Technical Badges for Visual Impact -->
![Laravel Version](https://shields.io)
![Docker Compliant](https://shields.io)
![Database](https://shields.io)
![Frontend Layout](https://shields.io)
![Architecture Pattern](https://shields.io)

A centralized educational enterprise portal designed to unify academic workflows, manage multi-tenant permissions, and serve as an enterprise-grade Learning Management System (LMS).

---

## 📐 System Architecture & Design Specification (SRS)
The system is architected using a modern product lifecycle framework, mapping a comprehensive ecosystem alongside a production-ready application core.

* **Phase 3 North Star Vision (SRS Document):** Formulates the macro-architectural requirements for automated admissions, live web-streaming instances, real-time WebSockets communication, and automated matrix grading.
  👉 **[Read the Full System Architecture Specification](./docs/OneSpot_Architecture_SRS.pdf)**
* **Current Implementation (Phase 1 MVP):** Focuses heavily on strict relational database structures, dynamic multi-theme execution nodes, and a custom multi-tenant permission security framework.

---

## 📸 Interface Previews
<!-- *(Pro-Tip: Replace these placeholders with your actual local application screenshots or the static/GIF loops we planned!)* -->

| Administrative Command Dashboard | Student Course Management Grid |
|---|---|
| <img src="docs/assets/student dashboard" width="100%" alt="Admin Panel Blueprint"/> | <img src="docs/assets/all courses.png" width="100%" alt="Student Course Layout"/> |

---

## ⚡ Core Architectural Components (Coded MVP)

### 🔑 Custom Role-Based Access Control (RBAC) Matrix
* Engineered a secure, independent permission verification matrix from scratch without third-party tutorial templates.
* Restricts selective administrative navigation layouts, action fields, and interface control buttons based on active security roles (`Admin`, `Teacher`, `Student`).

### 🎨 Relational Multi-Theme Engine
* Developed an architectural system where the active interface dynamically applies layout profiles based on account categories.
* Features a clean layout engine for custom dashboard sections, including dynamic modules for Announcements, Notifications, and Course lists.

### 🗄️ Relational Data Management & Security
* Strict, normalized MySQL schemas governing clean data mutations via structured, role-filtered CRUD controllers.
* Native data validation layers ensuring all form fields and data pipelines remain protected from invalid inputs.

---

## 🗺️ Product Lifecycle Roadmap

- [x] **Phase 1: Minimum Viable Product (MVP Core)**
  - [x] Custom multi-tenant RBAC security module layout.
  - [x] Normalized relational user, course, and notification database tables.
  - [x] Secure server-side CRUD processing for announcements.
  - [x] Responsive administrative panel interface integration.
- [ ] **Phase 2: Scale Integrations (Next Sprint)**
  - [ ] Gateway authentication pipelines (SMS/OTP validation modules).
  - [ ] Real-time public messaging endpoints and peer text rooms.
- [ ] **Phase 3: The North Star Architecture**
  - [ ] Enterprise live-classroom WebRTC streaming pipelines.
  - [ ] Automated assessment parsers and algorithmic report generation.

---

## 🛠️ Local Environment Initialization

This project is optimized to run smoothly inside micro-service containers, preventing system-wide environment conflicts.

```bash
# 1. Clone the core source repository
git clone https://github.com

# 2. Access the project directory node
cd onespot-education-lms

# 3. Secure local configuration file configuration
cp .env.example .env

# 4. Initialize dependencies using Composer package systems
composer install

# 5. Populate the database tables with structural data
php artisan migrate --seed
```

