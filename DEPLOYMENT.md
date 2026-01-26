# Deployment Guide - Render.com

This guide will help you deploy your Laravel portfolio to Render.com (free tier with zero downtime).

## 🚀 Quick Deploy

### Option 1: Deploy via Render Dashboard (Recommended)

1. **Sign up/Login to Render**
   - Go to [render.com](https://render.com)
   - Sign up with GitHub (recommended) or email

2. **Create New Web Service**
   - Click "New +" → "Web Service"
   - Connect your GitHub repository
   - Select your `Portfolio` repository

3. **Configure Service**
   - **Name**: `ngonidzashe-hunzvi` (or your preferred name)
   - **Region**: Choose closest to your users
   - **Branch**: `main` (or your default branch)
   - **Root Directory**: Leave empty (root of repo)
   - **Runtime**: `PHP`
   - **PHP Version**: Select `8.2` or `8.3` (required for Laravel 12)
   - **Build Command**: `chmod +x .render-build.sh && ./.render-build.sh`
   - **Start Command**: `php artisan serve --host=0.0.0.0 --port=$PORT`

4. **Environment Variables**
   Add these in the Render dashboard:
   ```
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://your-app-name.onrender.com
   LOG_CHANNEL=stderr
   LOG_LEVEL=error
   ```

5. **Generate APP_KEY**
   - After first deployment, go to Shell in Render dashboard
   - Run: `php artisan key:generate`
   - Copy the key and add it as `APP_KEY` environment variable

6. **Deploy**
   - Click "Create Web Service"
   - Wait for build to complete (5-10 minutes first time)
   - Your site will be live at `https://your-app-name.onrender.com`

### Option 2: Deploy via render.yaml (Auto-deploy)

The `render.yaml` file is already configured. Render will automatically detect it:

1. Push your code to GitHub
2. In Render dashboard, select "New +" → "Blueprint"
3. Connect your repository
4. Render will auto-detect `render.yaml` and create the service
5. Add environment variables as needed

## 🔧 Configuration

### Required Environment Variables

Add these in Render dashboard → Environment:

```env
APP_NAME="Ngonidzashe Hunzvi"
APP_ENV=production
APP_KEY=base64:your-generated-key-here
APP_DEBUG=false
APP_URL=https://your-app-name.onrender.com
LOG_CHANNEL=stderr
LOG_LEVEL=error
```

### Optional: PostgreSQL Database (Free Tier)

If you want to use PostgreSQL instead of SQLite:

1. **Create Database**
   - In Render: "New +" → "PostgreSQL"
   - Name: `portfolio-db`
   - Plan: Free

2. **Update Environment Variables**
   ```
   DB_CONNECTION=pgsql
   DB_HOST=<from-render-database>
   DB_PORT=5432
   DB_DATABASE=<from-render-database>
   DB_USERNAME=<from-render-database>
   DB_PASSWORD=<from-render-database>
   ```

3. **Run Migrations**
   - In Shell: `php artisan migrate --force`

### File Storage

For file uploads (like CV), you can:
- Use SQLite (files stored in database)
- Use Render's disk storage (persistent)
- Use cloud storage (AWS S3, Cloudinary, etc.)

## 📝 Post-Deployment Steps

1. **Verify Deployment**
   - Visit your Render URL
   - Check all pages load correctly
   - Test dark mode toggle
   - Test contact form

2. **Set Up Custom Domain** (Optional)
   - In Render dashboard → Settings → Custom Domain
   - Add your domain
   - Update DNS records as instructed

3. **Monitor Logs**
   - View logs in Render dashboard
   - Check for any errors

## 🔄 Updating Your Site

1. **Push to GitHub**
   ```bash
   git add .
   git commit -m "Update portfolio"
   git push
   ```

2. **Auto-Deploy**
   - Render automatically deploys on push to main branch
   - Check deployment status in Render dashboard

## 🆓 Free Tier Limits

- **512 MB RAM** - Sufficient for Laravel
- **0.1 CPU** - Good for low traffic
- **100 GB bandwidth/month** - Plenty for portfolio
- **Spins down after 15 min inactivity** - First request may be slow
- **Unlimited builds** - No limits

## 🚨 Troubleshooting

### Build Fails
- Check build logs in Render dashboard
- Ensure all dependencies are in `composer.json` and `package.json`
- Verify Node.js version (Render uses latest LTS)

### App Crashes
- Check logs in Render dashboard
- Verify all environment variables are set
- Ensure `APP_KEY` is generated

### Slow First Load
- Free tier spins down after 15 min inactivity
- First request after spin-down takes ~30 seconds
- Consider upgrading to paid plan for always-on

### Database Issues
- If using SQLite, ensure file permissions are correct
- For PostgreSQL, verify connection string

## 🔐 Security Checklist

- [ ] `APP_DEBUG=false` in production
- [ ] `APP_ENV=production`
- [ ] Strong `APP_KEY` generated
- [ ] All sensitive data in environment variables
- [ ] HTTPS enabled (automatic on Render)

## 📚 Additional Resources

- [Render Documentation](https://render.com/docs)
- [Laravel Deployment](https://laravel.com/docs/deployment)
- [Render PHP Support](https://render.com/docs/php)

---

**Need Help?** Check Render's [community forum](https://community.render.com) or [support](https://render.com/support)
