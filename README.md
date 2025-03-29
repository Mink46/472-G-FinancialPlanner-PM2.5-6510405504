# 472-G-FinancialPlanner-PM2.5
เพื่อช่วยในการจัดการรายรับรายจ่าย ซึ่งจะสร้างขึ้นมาใหม่ โดยมีฟีเจอร์หลักคือ
1. บันทึกรายรับรายจ่าย
2. Report สรุปรายรับรายจ่าย
3. แบ่งรายได้ออกเป็นสัดส่วนได้

## Team Members
รายชื่อสมาชิกรวม 4 คน

ชื่อ:     นายธีรภัทร์ อนันต์ไพศาลสิน (Project Owner)
รหัสนิสิต: 6510405580
หมู่เรียน:  1
ชัั้นปีที่:   3

ชื่อ:     นายธีรวัจน์ ก๊วยประเสริฐ (Thirawatz)
รหัสนิสิต: 6510405598
หมู่เรียน:  1
ชัั้นปีที่:   3

ชื่อ: นายณัฐภัทร ยิ้มละมัย (whitebe4st)
รหัสนิสิต: 6510405504 
หมู่เรียน:  1
ชัั้นปีที่:   3

ชื่อ: นายธัชวิชย์ ทวีชัยการ (NOOKX2)
รหัสนิสิต: 6510405571
หมู่เรียน:  1
ชัั้นปีที่:   3

## Quick Start Guide for Contributors

### Prerequisites
- Install [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- Git

### Setup Steps
1. Clone the repository
```bash
git clone https://github.com/whitebe4st/472-G-FinancialPlanner-PM2.5.git
cd 472-G-FinancialPlanner-PM2.5
```

2. Open setup.bat

3. Visit http://localhost:8000 in your browser

### Useful Commands
- Stop the application:
```bash
docker-compose down
```

- Restart containers:
```bash
docker-compose restart
```

## CI/CD Workflow

This project uses GitHub Actions for continuous integration and continuous deployment.

### Develop Branch Workflow

When pushing to the develop branch or opening a pull request to develop:
- All tests will run automatically
- A Docker image will be built (but not pushed)

### Main Branch Workflow

When pushing to the main branch:
- A Docker image will be built and pushed to Docker Hub
- A GitHub Release will be automatically created with a version tag
- The Docker image will be tagged with both 'latest' and a version-specific tag

### Required Secrets

To enable Docker Hub integration, add these repository secrets in GitHub:
- `DOCKER_USERNAME`: Your Docker Hub username
- `DOCKER_PASSWORD`: Your Docker Hub password or access token

### Branch Protection

The main branch is protected with the following rules:
- Direct pushes are not allowed
- Pull requests require at least 2 approving reviews
- Status checks must pass before merging