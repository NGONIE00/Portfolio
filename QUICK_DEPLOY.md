# 🚀 Quick Deployment Guide - Render.com

## Step-by-Step Deployment (5 minutes)

### 1. Push Your Code to GitHub
```bash
git add .
git commit -m "Add deployment configuration"
git push origin main
```

### 2. Sign Up for Render
- Go to [render.com](https://render.com)
- Click "Get Started for Free"
- Sign up with GitHub (recommended)

### 3. Create Web Service

**Option A: Using Blueprint (Easiest)**
1. Click "New +" → "Blueprint"
2. Connect your GitHub account
3. Select your `Portfolio` repository
4. Render will auto-detect `render.yaml`
5. Click "Apply"

**Option B: Manual Setup**
1. Click "New +" → "Web Service"
2. Connect your GitHub repository
3. Select `Portfolio` repository
4. Configure:
   - **Name**: `ngonidzashe-hunzvi`
   - **Region**: Choose closest (e.g., `Oregon (US West)`)
   - **Branch**: `main`
   - **Root Directory**: (leave empty)
   - **Runtime**: `PHP`
   - **PHP Version**: Select `8.2` or `8.3` (important!)
   - **Build Command**: `chmod +x .render-build.sh && ./.render-build.sh`
   - **Start Command**: `php artisan serve --host=0.0.0.0 --port=$PORT`

### 4. Add Environment Variables

In Render dashboard → Environment → Add Environment Variable:

```
APP_NAME="Ngonidzashe Hunzvi"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app-name.onrender.com
LOG_CHANNEL=stderr
LOG_LEVEL=error
```

**Important:** After first deployment, you'll need to add `APP_KEY`:
1. Go to Shell in Render dashboard
2. Run: `php artisan key:generate`
3. Copy the generated key
4. Add as environment variable: `APP_KEY=base64:...`

### 5. Deploy

- Click "Create Web Service" (or "Apply" for Blueprint)
- Wait 5-10 minutes for first build
- Your site will be live! 🎉

### 6. Test Your Site

Visit: `https://your-app-name.onrender.com`

- ✅ Home page loads
- ✅ Dark mode toggle works
- ✅ All pages accessible
- ✅ Contact form works

## 🎯 That's It!

Your portfolio is now live on Render's free tier!

**Note:** Free tier spins down after 15 min of inactivity. First request after spin-down may take ~30 seconds.

## 🔄 Updating Your Site

Just push to GitHub:
```bash
git push origin main
```

Render will automatically redeploy! ✨

## 📞 Need Help?

- Check `DEPLOYMENT.md` for detailed guide
- Render Docs: https://render.com/docs
- Render Community: https://community.render.com
