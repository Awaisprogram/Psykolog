# 🤖 AI Assistant Backend - FastAPI + OpenAI Agents + Gemini

This is the backend of an AI-powered assistant built with **FastAPI** and **Uvicorn**, using `uv` as a package manager. It integrates with **OpenAI Agents SDK** and **Google's Gemini model** to generate intelligent responses. The application is deployed seamlessly using the **Vercel**.

---

## 🚀 Features

- ⚡ Built with **FastAPI** and **Uvicorn**
- 🧠 Powered by **OpenAI Agents SDK**
- 🌐 Uses **Google Gemini API** for response generation
- 📦 Dependencies managed using [`uv`](https://github.com/charliermarsh/uv)
- 🔐 CORS enabled for secure frontend-backend communication

---

## 📂 Project Structure

/Backend<br>
├── chat_api.py # FastAPI app entry point <br>
├── requirements.txt # Dependencies managed by uv<br>
├── .env # API keys and environment variables<br>

## 🧪 Requirements

- Python 3.11+
- `uv` (instead of pip)
- OpenAI Agents SDK
- Gemini API key
- Uvicorn

## 🚀 FastAPI Deployment on Vercel

### 🛠 Step-by-Step Guide

# 🚀 Vercel Deployment for FastAPI Chat API

This project deploys a FastAPI-based chat endpoint using Vercel serverless functions.

---

### 📁 1. vercel.json Configuration

```json
{
  "version": 2,
  "builds": [
    {
      "src": "chat_api.py",
      "use": "@vercel/python",
      "config": {
        "runtime": "python3.9"
      }
    }
  ],
  "routes": [
    { "src": "/(.*)", "dest": "chat_api.py" }
  ]
}
```
### 2. Node Settings in vercel dashboard
Go to your project on vercel, then Settings > Build & Deployment > Node.js Version

### 3. End Part

```bash
YOU ARE GOOD TO GO NOW 😁
```
