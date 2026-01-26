# 🚂 Railway Quick Start Guide

**Best choice for Zimbabwe!** Railway is the easiest to set up and has excellent global coverage.

## ⚡ 5-Minute Setup

### Step 1: Sign Up
1. Go to [railway.app](https://railway.app)
2. Click "Start a New Project"
3. Sign up with GitHub (recommended)

### Step 2: Deploy
1. Click "New Project"
2. Select "Deploy from GitHub repo"
3. Choose your `Portfolio` repository
4. Railway will automatically:
   - Detect it's a Laravel app
   - Use PHP 8.2 from your `composer.json`
   - Start building

### Step 3: Add Environment Variables
In Railway dashboard → Variables tab, add:

```
APP_NAME="Ngonidzashe Hunzvi"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app-name.up.railway.app
LOG_CHANNEL=stderr
LOG_LEVEL=error
```

### Step 4: Generate APP_KEY
1. Go to your service in Railway
2. Click "View Logs" or "Shell"
3. Run: `php artisan key:generate`
4. Copy the generated key
5. Add to Variables: `APP_KEY=base64:...`

### Step 5: Done! 🎉
Your site will be live at: `https://your-app-name.up.railway.app`

## 🔄 Auto-Deploy
Railway automatically deploys every time you push to GitHub!

## 💰 Free Tier
- $5 credit/month (plenty for a portfolio)
- No credit card required
- Auto-deployments
- Free SSL

## 🌍 Global Coverage
Railway has servers worldwide, so your site will be fast from Zimbabwe!

## 📝 That's It!
Railway handles everything automatically. Just connect your repo and deploy!
