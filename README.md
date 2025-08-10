# Fullstack AI-Driven Delivery Dashboard with Profiling & Analytics

## 📌 Overview  
The **Fullstack AI-Driven Delivery Dashboard** is a multi-service platform designed for **driver, mechanic, and helper profiling** with integrated **AI-powered analytics**.  
It includes a **Laravel backend API**, **Next.js frontend UI**, a **Flask AI microservice**, and **Metabase dashboards** for visual analytics — all orchestrated via Docker.

<img width="2731" height="1612" alt="fullstack01" src="https://github.com/user-attachments/assets/60a3eb90-35cd-484c-b248-688659d3c460" />


The system tracks:  
- **Drug test results**  
- **Violations & infractions**  
- **Performance feedback**  
- **Credential validity**  
- **Trends & anomalies via analytics**

---

## 🗂 Project Structure

```bash
fullstack-ai-dashboard/
├── ai-service/                  # Flask microservice with ML model
│   ├── app.py
│   ├── model.pkl
│   └── requirements.txt
│
├── backend/                     # Laravel API backend
│   ├── app/
│   │   ├── Models/
│   │   └── Http/Controllers/
│   ├── database/migrations/
│   └── .env
│
├── frontend/                    # Next.js + Radix UI
│   ├── pages/
│   └── components/
│
├── docker-compose.yml           # Global orchestrator
└── README.md
```

## ⚙ Services
### 1️⃣ Backend (Laravel API)
- Handles driver profile CRUD operations
- Exposes API for frontend & AI microservice
- Uses PostgreSQL as the main database
- Uses Redis for job queue and async credential validation

**Key models:**
- `Driver`
- `DrugTestResult`
- `Violation`
- `Feedback`
- `Credential`
- `Infraction`

### 2️⃣ Frontend (Next.js + Radix UI)
- Dynamic driver dashboards at `/drivers/[id]`
- Displays:
  - Drug test history
  - Violations & infractions timeline
  - Average performance rating
  - Credential validity status

<img width="2724" height="1611" alt="fullstack03" src="https://github.com/user-attachments/assets/4f784f58-7bf3-4e03-8e74-ddc26ca4e2a3" />

### 3️⃣ Metabase
- Connects directly to PostgreSQL
- Provides analytics dashboards:
  - 📈 Drug test result trends (line chart)
  - 📋 Drivers with >3 violations (table)
  - 📊 Credential validity rates (bar chart)
  - 🔥 Monthly infractions (heatmap or bar chart)

---

## 🐳 Docker Orchestration
Root docker-compose.yml orchestrates all services:
- PostgreSQL (DB)
- Laravel backend
- Next.js frontend
- Flask AI microservice
- Metabase analytics

Example:

```bash
docker-compose up --build
```
This launches all microservices and makes them available locally.

To enable hot-reload on Next.js, run the following:
```bash
docker-compose up --watch
```

---

## 📦 Installation & Setup
### 1. Clone Repository
```bash
git clone [<REPO_URL>](https://github.com/HansQueja/fullstack-delivery-dashboard)
cd fullstack-ai-dashboard
```
### 2. Configure Environment Variables
Update `.env` files in any other required service.
> Note: Use placeholders here — your own credentials and API keys will go.

### 3. Build & Run with Docker
```bash
docker-compose up --build
```
### 4. Run Laravel Migrations
```bash
docker exec -it fullstack-ai-dashboard-backend-1 bash
php artisan migrate
```
### 5. Seed Test Data (Optional)
```bash
php artisan db:seed
```

---

## 📊 Sample API Endpoint
GET `/api/drivers/{id}/profile`
Returns driver profile including:
- Drug test results
- Violations
- Feedback
- Credentials
- Infractions

---

## 📈 Metabase Dashboards
Available Visualizations:
- **Drug Test Result Trends** → Monthly trend of test results
- **Violation Report** → Drivers with 3+ violations
- **Credential Validity Rates** → % of valid credentials by type
- **Monthly Infractions** → Frequency of infractions per month

---

🛠 Tech Stack
- **Backend:** Laravel 10, PHP 8.x
- **Frontend:** Next.js 13, Radix UI
- **AI Service:** Flask, scikit-learn, pandas
- **Database:** PostgreSQL
- **Analytics:** Metabase
- **Containerization:** Docker & Docker Compose

---

## 📜 License
MIT License — Feel free to modify and distribute.


