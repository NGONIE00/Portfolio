# Alternative Deployment Options for Laravel

Since Render may not have PHP support in your region, here are better alternatives with free tiers and global coverage:

## 🚂 Option 1: Railway (Recommended - Easiest)

**Best for:** Easy setup, automatic deployments, free tier
**Global Coverage:** Excellent (multiple regions)

### Quick Setup:

1. **Sign up at [railway.app](https://railway.app)**
   - Sign up with GitHub (free tier available)

2. **Create New Project**
   - Click "New Project"
   - Select "Deploy from GitHub repo"
   - Choose your `Portfolio` repository

3. **Railway will auto-detect Laravel**
   - It will use the `railway.json` config
   - Automatically detects PHP 8.2 from `composer.json`

4. **Add Environment Variables**
   ```
   APP_NAME="Ngonidzashe Hunzvi"
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://your-app-name.up.railway.app
   LOG_CHANNEL=stderr
   LOG_LEVEL=error
   ```

5. **Generate APP_KEY**
   - After deployment, go to "Variables" tab
   - Add: `APP_KEY` (run `php artisan key:generate` in Railway shell)

6. **Deploy**
   - Railway auto-deploys on every push to main
   - Your site: `https://your-app-name.up.railway.app`

**Free Tier:**
- $5 credit/month (enough for small apps)
- No credit card required
- Auto-deploys from GitHub

---

## ✈️ Option 2: Fly.io (Best Global Coverage)

**Best for:** Global edge network, excellent performance worldwide
**Global Coverage:** Excellent (serves from nearest location)

### Quick Setup:

1. **Install Fly CLI**
   ```bash
   # Windows (PowerShell)
   powershell -Command "iwr https://fly.io/install.ps1 -useb | iex"
   ```

2. **Sign up at [fly.io](https://fly.io)**
   - Free tier available

3. **Deploy**
   ```bash
   fly launch
   ```
   - Follow prompts
   - Select region closest to you (or let Fly choose)
   - Use existing `fly.toml` config

4. **Add Secrets (Environment Variables)**
   ```bash
   fly secrets set APP_NAME="Ngonidzashe Hunzvi"
   fly secrets set APP_ENV=production
   fly secrets set APP_DEBUG=false
   fly secrets set LOG_CHANNEL=stderr
   fly secrets set LOG_LEVEL=error
   ```

5. **Generate APP_KEY**
   ```bash
   fly ssh console
   php artisan key:generate
   # Copy the key and set it:
   fly secrets set APP_KEY=base64:...
   ```

**Free Tier:**
- 3 shared-cpu VMs
- 3GB persistent volume storage
- 160GB outbound data transfer
- Global edge network

---

## 🌐 Option 3: Koyeb (Simple & Fast)

**Best for:** Simple setup, global edge network
**Global Coverage:** Excellent

### Quick Setup:

1. **Sign up at [koyeb.com](https://www.koyeb.com)**
   - Free tier available

2. **Create App**
   - Click "Create App"
   - Connect GitHub repository
   - Select `Portfolio` repo

3. **Configure**
   - **Build Command**: `chmod +x .render-build.sh && ./.render-build.sh`
   - **Run Command**: `php artisan serve --host=0.0.0.0 --port=8000`
   - **Type**: Web Service

4. **Environment Variables**
   ```
   APP_NAME="Ngonidzashe Hunzvi"
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://your-app-name.koyeb.app
   LOG_CHANNEL=stderr
   LOG_LEVEL=error
   ```

5. **Deploy**
   - Koyeb auto-deploys on push
   - Your site: `https://your-app-name.koyeb.app`

**Free Tier:**
- 2 services
- 512MB RAM per service
- Global edge network
- Auto-deployments

---

## 📊 Comparison

| Feature | Railway | Fly.io | Koyeb |
|---------|---------|--------|-------|
| **Free Tier** | ✅ $5/month credit | ✅ 3 VMs | ✅ 2 services |
| **Ease of Setup** | ⭐⭐⭐⭐⭐ | ⭐⭐⭐⭐ | ⭐⭐⭐⭐⭐ |
| **Global Coverage** | ⭐⭐⭐⭐ | ⭐⭐⭐⭐⭐ | ⭐⭐⭐⭐⭐ |
| **Auto-Deploy** | ✅ | ✅ | ✅ |
| **PHP Support** | ✅ Auto-detect | ✅ | ✅ |
| **Best For** | Beginners | Performance | Simplicity |

---

## 🎯 Recommendation for Zimbabwe

**Best Choice: Railway**
- Easiest setup
- Good global coverage
- Automatic PHP detection
- No complex configuration needed
- Free tier is generous

**Alternative: Fly.io**
- Best global performance
- Serves from nearest location
- More control over regions
- Slightly more setup required

---

## 📝 Next Steps

1. **Choose a platform** (Railway recommended)
2. **Follow the setup guide** above
3. **Update your repository** with the new config files
4. **Deploy!**

All platforms support:
- ✅ Automatic deployments from GitHub
- ✅ Environment variables
- ✅ Free SSL certificates
- ✅ Custom domains (optional)

---

## 🔄 Migration from Render

If you already started on Render:
1. Create new service on chosen platform
2. Copy environment variables
3. Deploy
4. Update DNS if using custom domain

---

**Need help?** Each platform has excellent documentation:
- [Railway Docs](https://docs.railway.app)
- [Fly.io Docs](https://fly.io/docs)
- [Koyeb Docs](https://www.koyeb.com/docs)
